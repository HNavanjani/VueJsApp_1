import Signup from './components/Signup';
import Login from './components/Login';


export const routes = [
    {
    path: '/sign-up',
    name: 'sign-up',
    meta: {layout:'sign-up'},
    component: Signup
}
,
{
    path: '/login',
    name: 'login',
    meta: {layout:'login'},
    component: Login
}

];

