/******/
(function(modules) { // webpackBootstrap
    /******/ // The module cache
    /******/
    var installedModules = {};
    /******/
    /******/ // The require function
    /******/
    function __webpack_require__(moduleId) {
        /******/
        /******/ // Check if module is in cache
        /******/
        if (installedModules[moduleId]) {
            /******/
            return installedModules[moduleId].exports;
            /******/
        }
        /******/ // Create a new module (and put it into the cache)
        /******/
        var module = installedModules[moduleId] = {
            /******/
            i: moduleId,
            /******/
            l: false,
            /******/
            exports: {}
            /******/
        };
        /******/
        /******/ // Execute the module function
        /******/
        modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        /******/
        /******/ // Flag the module as loaded
        /******/
        module.l = true;
        /******/
        /******/ // Return the exports of the module
        /******/
        return module.exports;
        /******/
    }
    /******/
    /******/
    /******/ // expose the modules object (__webpack_modules__)
    /******/
    __webpack_require__.m = modules;
    /******/
    /******/ // expose the module cache
    /******/
    __webpack_require__.c = installedModules;
    /******/
    /******/ // define getter function for harmony exports
    /******/
    __webpack_require__.d = function(exports, name, getter) {
        /******/
        if (!__webpack_require__.o(exports, name)) {
            /******/
            Object.defineProperty(exports, name, { enumerable: true, get: getter });
            /******/
        }
        /******/
    };
    /******/
    /******/ // define __esModule on exports
    /******/
    __webpack_require__.r = function(exports) {
        /******/
        if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
            /******/
            Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
            /******/
        }
        /******/
        Object.defineProperty(exports, '__esModule', { value: true });
        /******/
    };
    /******/
    /******/ // create a fake namespace object
    /******/ // mode & 1: value is a module id, require it
    /******/ // mode & 2: merge all properties of value into the ns
    /******/ // mode & 4: return value when already ns object
    /******/ // mode & 8|1: behave like require
    /******/
    __webpack_require__.t = function(value, mode) {
        /******/
        if (mode & 1) value = __webpack_require__(value);
        /******/
        if (mode & 8) return value;
        /******/
        if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
        /******/
        var ns = Object.create(null);
        /******/
        __webpack_require__.r(ns);
        /******/
        Object.defineProperty(ns, 'default', { enumerable: true, value: value });
        /******/
        if (mode & 2 && typeof value != 'string')
            for (var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
        /******/
        return ns;
        /******/
    };
    /******/
    /******/ // getDefaultExport function for compatibility with non-harmony modules
    /******/
    __webpack_require__.n = function(module) {
        /******/
        var getter = module && module.__esModule ?
            /******/
            function getDefault() { return module['default']; } :
            /******/
            function getModuleExports() { return module; };
        /******/
        __webpack_require__.d(getter, 'a', getter);
        /******/
        return getter;
        /******/
    };
    /******/
    /******/ // Object.prototype.hasOwnProperty.call
    /******/
    __webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
    /******/
    /******/ // __webpack_public_path__
    /******/
    __webpack_require__.p = "/";
    /******/
    /******/
    /******/ // Load entry module and return exports
    /******/
    return __webpack_require__(__webpack_require__.s = 1);
    /******/
})
/************************************************************************/
/******/
({

    /***/
    "./resources/js/my_js/registration_error.js":
    /*!**************************************************!*\
      !*** ./resources/js/my_js/registration_error.js ***!
      \**************************************************/
    /*! no static exports found */
    /***/
        (function(module, exports) {

        $(document).ready(function() {
            var login = $("input[name=login]");
            var email = $("input[name=email]");
            var pass = $("input[name=password]");
            var passCnf = $("input[name=password_confirm]");
            $(".text-error").remove();
            login.css("border-color", "red");
            email.css("border-color", "red");
            pass.css("border-color", "red");
            passCnf.css("border-color", "red");
            passCnf.after('<span class="text-error">Такой пользователь уже существует</span>');
        });

        /***/
    }),

    /***/
    "./resources/js/my_js/registration_form_validation.js":
    /*!************************************************************!*\
      !*** ./resources/js/my_js/registration_form_validation.js ***!
      \************************************************************/
    /*! no static exports found */
    /***/
        (function(module, exports) {

        $(document).ready(function() {
            var login = $("input[name=login]");
            var email = $("input[name=email]");
            var pass = $("input[name=password]");
            var passCnf = $("input[name=password_confirm]");
            var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            $("#registration_form").on("submit", function() {
                $(".text-error").remove();

                if (login.val().length < 5) {
                    login.after('<span class="text-error">Логин должен быть больше 4 символов</span>');
                    return false;
                }

                if (email.val().search(pattern) != 0) {
                    email.after('<span class="text-error">Неверный тип email</span>');
                    return false;
                }

                if (pass.val().length < 7) {
                    pass.after('<span class="text-error">Пароль должен быть больше 6 символов</span>');
                    return false;
                }

                if (passCnf.val() != pass.val()) {
                    passCnf.after('<span class="text-error">Пароли не совпадают</span>');
                    return false;
                }
            });
        });

        /***/
    }),

    /***/
    1:
    /*!*************************************************************************************************************!*\
      !*** multi ./resources/js/my_js/registration_form_validation.js ./resources/js/my_js/registration_error.js ***!
      \*************************************************************************************************************/
    /*! no static exports found */
    /***/
        (function(module, exports, __webpack_require__) {

        __webpack_require__( /*! C:\OpenServer\domains\mygallery\resources\js\my_js\registration_form_validation.js */ "./resources/js/my_js/registration_form_validation.js");
        module.exports = __webpack_require__( /*! C:\OpenServer\domains\mygallery\resources\js\my_js\registration_error.js */ "./resources/js/my_js/registration_error.js");


        /***/
    })

    /******/
});