import axios from "axios";
import {
    setupAxiosErrorInterceptor,
    setupGlobalErrorHandler,
} from "./lib/errorHandler.js";

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Настройка обработки ошибок
setupGlobalErrorHandler();
setupAxiosErrorInterceptor(window.axios);
