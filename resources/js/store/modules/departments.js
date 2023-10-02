import axios from 'axios';

export default {
  state: {
    departments_test: 0,
  },
  getters: {},
  mutations: {},
  actions: {
    storeDepartment: (context, departmentData) => {
      departmentData.post(window.url + 'api/storeDepartment')
            .then((response) => {
              //this.getDepartments()
              $('#exampleModal').modal('hide')
            });
    }

  },
}