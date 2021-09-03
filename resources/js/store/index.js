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
            console.log('state', state);
            return state.receipts;
        }
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
