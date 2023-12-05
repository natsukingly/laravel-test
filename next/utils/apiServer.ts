import axios from "axios";

export const apiServer = axios.create({
    baseURL: process.env.API_ENDOPOINT,
    responseType: 'json',
    headers: {
        "Content-Type": "application/json"
    }
})