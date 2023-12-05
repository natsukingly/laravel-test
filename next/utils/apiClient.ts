import axios from "axios";

console.log(process.env.API_ENDOPOINT);
export const apiClient = axios.create({
    baseURL: process.env.NEXT_PUBLIC_API_ENDOPOINT,
    responseType: 'json',
    headers: {
        "Content-Type": "application/json"
    }
})
