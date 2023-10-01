import { createStore } from "vuex";

export const store = createStore({
  strict: true,
  state: {
    test: 0,
  },
  getters:{
    test(state) {
      return state.test
    }
  },
  mutations:{
    testMutation: (state) => {
      // console.log('mutation commited');
      state.test++;
      console.log(state.test);
    }
  },
  actions: {
    testAction: (context) => {
      //console.log('action dispatched');
      context.commit('testMutation')
    }
  }
});