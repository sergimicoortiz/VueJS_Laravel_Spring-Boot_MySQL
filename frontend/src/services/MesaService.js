import Api from "./Api";
import secrets from "../secrets.example";

export default {

    GetMesas() {
        return Api(secrets.URL_SPRING).get('mesa');
    },//GetMesas
    GetOneLinkMesa(id) {
        return Api(secrets.URL_SPRING).get('mesa/' + id);
    },//GetOneLinkMesa

}//export