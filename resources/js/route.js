import  ListUser  from "./components/user/listUser";
import  CreateUser  from "./components/user/createUser";
import  Dashboard  from "./components/dashboard/dashboard";
import  Setting  from "./components/setting/setting";


export const routes = [
    {
        path: '/',
        component: Dashboard,
        name: 'Dashboard'
    },
    {
        path: '/user',
        component: ListUser,
        name: 'List User'
    },
    {
        path: '/setting',
        component: Setting,
        name: 'Setting'
    },
    {
        path: '/user/create',
        component: CreateUser,
        name: 'Create User'
    }
];