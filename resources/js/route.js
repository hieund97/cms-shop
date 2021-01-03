const Dashboard = () => import('./components/dashboard/dashboard');
const ListUser = () => import('./components/user/listUser');


export const routes = [
    {
        path: '/',
        component: Dashboard,
        name: 'Dashboard'
    },
    {
        path: '/user',
        component: ListUser,
        name: 'ListUser'
    }
];