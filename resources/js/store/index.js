let mockReceipt = {
    id: 123,
    purchase_date: '16:12:13 14.02.1000',
    market: 43543,
    basket: 768768,
};

export default  {
    state: {
        receipts: [],
    },
    getters: {
        getReceipts(state) {
            console.log('store getReceipts getter call', state);
            return state.receipts;
        }
    },
    actions: {
        loadReceipts(context) {
            console.log();
            let receipt = {...mockReceipt};
            context.commit('receipts', [receipt]);
        }
    },
    mutations: {
        receipts(state, receipts) {
            console.log('store receipts motution call', state, receipts);
            return state.receipts = receipts;
        }
    },
};
