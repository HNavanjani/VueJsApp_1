import Signup from "./components/Signup";
import Login from "./components/Login";
import BlogPost from "./components/BlogPost";
import HomeComponent from "./components/HomeComponent.vue";
import CreateComponent from "./components/CreateComponent.vue";
import IndexComponent from "./components/IndexComponent.vue";
import EditComponent from "./components/EditComponent.vue";

export const routes = [
    {
        path: "/sign-up",
        name: "sign-up",
        meta: { layout: "sign-up" },
        component: Signup
    },
    {
        path: "/login",
        name: "login",
        meta: { layout: "login" },
        component: Login
    },
    {
        path: "/blogs",
        name: "blogs",
        meta: { layout: "blogs" },
        component: BlogPost
    },
    {
        name: "home",
        path: "/",
        component: HomeComponent
    },
    {
        name: "create",
        path: "/create",
        component: CreateComponent
    },
    {
        name: "posts",
        path: "/posts",
        component: IndexComponent
    },
    {
        name: "edit",
        path: "/edit/:id",
        component: EditComponent
    }
];
