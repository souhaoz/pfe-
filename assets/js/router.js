import Vue from "vue";
import Router from "vue-router";
import AppHeader from "./layout/AppHeader";
import AppFooter from "./layout/AppFooter";
import Components from "./views/Components.vue";
import Landing from "./views/Landing.vue";
import Login from "./views/Login.vue";
import Register from "./views/Register.vue";
import Profile from "./views/Profile.vue";
import Publicity from "./views/Publicity.vue";
import Document from "./views/Document.vue";
import ListUser from "./views/ListUser.vue";
import editUser from "./views/EditUser";
import logout from "./views/Logout";

Vue.use(Router);

export default new Router({
  linkExactActiveClass: "active",
  routes: [
    {
      path: "/",
      name: "home",
      components: {
        header: AppHeader,
        default: Landing,
        footer: AppFooter
      }
    },
    {
      path: "/login",
      name: "login",
      components: {
        header: AppHeader,
        default: Login,
        footer: AppFooter
      }
    },
    {
      path: "/register",
      name: "register",
      components: {
        header: AppHeader,
        default: Register,
        footer: AppFooter
      }
    },
    {
      path: "/landing",
      name: "landing",
      components: {
        header: AppHeader,
        default: Landing,
        footer: AppFooter
      }
    },
    {
      path: "/profile",
      name: "profile",
      components: {
        header: AppHeader,
        default: Profile,
        footer: AppFooter
      }
    },
    {
      path: "/document0",
      name: "document0",
      components: {

        default: Document

      }
    },
    {
      path: "/editUser/:id",
      name: "editUser",
      components: {
        default: editUser
      }
    },
    {
      path: "/pub",
      name: "pub",
      components: {
        default: Publicity
      }
    },
    {
      path: "/ListUser",
      name: "ListUser",
      components: {
        default: ListUser
      }
    },
    {
      path: "/logout",
      name: "logout",
      components: {
        default: logout,

      }
    }

  ],
  scrollBehavior: to => {
    if (to.hash) {
      return { selector: to.hash };
    } else {
      return { x: 0, y: 0 };
    }
  }
});
