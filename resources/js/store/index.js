import ObjectTool from '../tools/ObjectTool';

export default  {
    state: (window.serverSideData ? window.serverSideData : {}),
    getters: {
        getReceipts(state) {
            return state.receipts;
        },
        getCsrfToken(state) {
            return state.csrfToken;
        },
        getUser(state) {
            return state.user;
        },
        getAuthed(state) {
            return ObjectTool.isEntity(state.user);
        },
        getLoginForm(state) {
            return state.auth.login;
        },
    },
    actions: {
        loadReceipts(context) {
            context.commit('receipts', {data: []});
        },
    },
    mutations: {
        receipts(state, receipts) {
            return state.receipts = receipts;
        }
    },
};
