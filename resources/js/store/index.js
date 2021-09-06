import ObjectTool from '../tools/ObjectTool';

let mockReceipt = {
    id: 123,
    purchase_date: '16:12:13 14.02.1000',
    market: 43543,
    basket: 768768,
};

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
    },
    actions: {
        loadReceipts(context) {
            let receipts = [mockReceipt];
            context.commit('receipts', {data: receipts});
        },
    },
    mutations: {
        receipts(state, receipts) {
            return state.receipts = receipts;
        }
    },
};
