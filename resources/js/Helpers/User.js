import Token from './Token';
import AppStorage from './AppStorage';

class User {
    login(data) {
        axios.post('/api/auth/login', data)
            .then(response => this.responseAfterLogin(response))
            .catch(error => console.log(error));
    }

    responseAfterLogin(response) {

        const access_token = response.data.access_token;
        const username = response.data.user;

        if(Token.isValid(access_token)) {
            AppStorage.store(username, access_token);
            window.location = '/forum';
        }

    }

    hasToken() {
        const storedToken = AppStorage.getToken();
        if (storedToken) {
            return Token.isValid(storedToken);
        }

        return false;
    }

    loggedIn() {
        return this.hasToken();
    }

    logout() {
        AppStorage.clear();
        window.location = '/forum';
    }

    name() {
        if (this.loggedIn()) {
            return AppStorage.getUser();
        }
    }

    id() {
        if (this.loggedIn()) {
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub;
        }
    }
}

export default User = new User();
