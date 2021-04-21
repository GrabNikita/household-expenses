import TheHomePage from './components/TheHomePage';
import The404Page from './components/The404Page';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: TheHomePage,
    },
    {
        path: '*',
        name: '404',
        component: The404Page,
    }
];
