import TheHomePage from './pages/TheHomePage';
import The404Page from './pages/The404Page';
import ReceiptsPage from './pages/ReceiptsPage';
import LoginPage from './pages/auth/LoginPage';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: TheHomePage,
    },
    {
        path: '/login',
        name: 'login',
        component: LoginPage,
    },
    {
        path: '/markets',
        name: 'markets',
        component: The404Page,
    },
    {
        path: '/manufacturers',
        name: 'manufacturers',
        component: The404Page,
    },
    {
        path: '/products',
        name: 'products',
        component: The404Page,
    },
    {
        path: '/receipts',
        name: 'receipts',
        component: ReceiptsPage,
    },
    {
        path: '*',
        name: '404',
        component: The404Page,
    },
];
