new Vue ({
    el: "#todo",
    data: {
        // cathegory list
        cathegoryList: [
            {
                name: 'Tutti',
                icon: '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.18 512.18" style="enable-background:new 0 0 512.18 512.18;" xml:space="preserve"> <g> <g> <path d="M448.18,80h-320c-17.673,0-32,14.327-32,32s14.327,32,32,32h320c17.673,0,32-14.327,32-32S465.853,80,448.18,80z"/> </g> </g> <g> <g> <path d="M64.18,112c-0.036-8.473-3.431-16.586-9.44-22.56c-12.481-12.407-32.639-12.407-45.12,0 C3.61,95.414,0.215,103.527,0.18,112c-0.239,2.073-0.239,4.167,0,6.24c0.362,2.085,0.952,4.124,1.76,6.08 c0.859,1.895,1.876,3.715,3.04,5.44c1.149,1.794,2.49,3.457,4,4.96c1.456,1.45,3.065,2.738,4.8,3.84 c1.685,1.227,3.512,2.248,5.44,3.04c2.121,1.1,4.382,1.908,6.72,2.4c2.073,0.232,4.167,0.232,6.24,0 c8.45,0.007,16.56-3.329,22.56-9.28c1.51-1.503,2.851-3.166,4-4.96c1.164-1.725,2.181-3.545,3.04-5.44 c1.021-1.932,1.826-3.971,2.4-6.08C64.419,116.167,64.419,114.073,64.18,112z"/> </g> </g> <g> <g> <path d="M64.18,256c0.238-2.073,0.238-4.167,0-6.24c-0.553-2.065-1.359-4.053-2.4-5.92c-0.824-1.963-1.843-3.839-3.04-5.6 c-1.109-1.774-2.455-3.389-4-4.8c-12.481-12.407-32.639-12.407-45.12,0C3.61,239.414,0.215,247.527,0.18,256 c0.062,4.217,0.875,8.388,2.4,12.32c0.802,1.893,1.766,3.713,2.88,5.44c1.217,1.739,2.611,3.348,4.16,4.8 c1.414,1.542,3.028,2.888,4.8,4c1.685,1.228,3.511,2.249,5.44,3.04c1.951,0.821,3.992,1.412,6.08,1.76 c2.047,0.459,4.142,0.674,6.24,0.64c2.073,0.239,4.167,0.239,6.24,0c2.036-0.349,4.024-0.94,5.92-1.76 c1.981-0.786,3.861-1.807,5.6-3.04c1.772-1.112,3.386-2.458,4.8-4c1.542-1.414,2.888-3.028,4-4.8c1.23-1.684,2.251-3.51,3.04-5.44 c1.093-2.124,1.9-4.384,2.4-6.72C64.426,260.167,64.426,258.073,64.18,256z"/> </g> </g> <g> <g> <path d="M64.18,400c0.237-2.073,0.237-4.167,0-6.24c-0.553-2.116-1.359-4.157-2.4-6.08c-0.859-1.895-1.876-3.715-3.04-5.44 c-1.112-1.772-2.458-3.386-4-4.8c-12.481-12.407-32.639-12.407-45.12,0c-1.542,1.414-2.888,3.028-4,4.8 c-1.164,1.725-2.181,3.545-3.04,5.44c-0.83,1.948-1.421,3.99-1.76,6.08c-0.451,2.049-0.665,4.142-0.64,6.24 c0.036,8.473,3.431,16.586,9.44,22.56c1.414,1.542,3.028,2.888,4.8,4c1.685,1.228,3.511,2.249,5.44,3.04 c1.951,0.821,3.992,1.412,6.08,1.76c2.047,0.459,4.142,0.674,6.24,0.64c2.073,0.239,4.167,0.239,6.24,0 c2.036-0.349,4.024-0.94,5.92-1.76c1.981-0.786,3.861-1.807,5.6-3.04c1.772-1.112,3.386-2.458,4.8-4 c1.542-1.414,2.888-3.028,4-4.8c1.231-1.683,2.252-3.51,3.04-5.44c1.092-2.125,1.899-4.384,2.4-6.72 C64.426,404.167,64.426,402.073,64.18,400z"/> </g> </g> <g> <g> <path d="M480.18,224h-352c-17.673,0-32,14.327-32,32s14.327,32,32,32h352c17.673,0,32-14.327,32-32S497.853,224,480.18,224z"/> </g> </g> <g> <g> <path d="M336.18,368h-208c-17.673,0-32,14.327-32,32c0,17.673,14.327,32,32,32h208c17.673,0,32-14.327,32-32 C368.18,382.327,353.853,368,336.18,368z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g></g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>',
                click: 'allTodos'
            },
            {
                name: 'Contrassegnati',
                icon: '<svg id="Capa_1" enable-background="new 0 0 512 512" height="14" viewBox="0 0 512 512" width="14" xmlns="http://www.w3.org/2000/svg"><g><path d="m190.572 371.201-10.308 60.098c-2.098 12.228 10.776 21.59 21.764 15.813l53.972-28.375 53.972 28.375c10.978 5.774 23.863-3.575 21.764-15.813l-10.308-60.098 43.664-42.562c8.884-8.66 3.972-23.8-8.313-25.585l-60.342-8.768-26.985-54.68c-5.491-11.126-21.408-11.132-26.902 0l-26.985 54.68-60.342 8.768c-12.278 1.785-17.203 16.92-8.313 25.585zm37.109-48.361c4.886-.71 9.109-3.779 11.294-8.206l17.025-34.495 17.024 34.496c2.185 4.427 6.409 7.496 11.294 8.206l38.068 5.531-27.546 26.852c-3.535 3.446-5.148 8.411-4.314 13.277l6.503 37.915-34.05-17.901c-4.368-2.297-9.591-2.298-13.96 0l-34.05 17.901 6.503-37.915c.834-4.866-.779-9.831-4.314-13.277l-27.546-26.852z"/><path d="m497 58h-51v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-150.666v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-51c-8.284 0-15 6.716-15 15v424c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15 0-9.304 0-419.081 0-424 0-8.284-6.716-15-15-15zm-135.667-28h54.667v28h-54.667zm-265.333 0h54.667v28h-54.667zm386 452h-452v-283.92h452zm0-313.92h-452v-80.08h452z"/></g></svg>',
                click: 'PriorityTodos'
            },
        ],

        // set empty arrays (for api)
        allTodos: [],
        allTodoLists: [],
        listIndex: '',

        todoListTitle: 'TUTTI',

        // single tood lists
        singleTodoList: [],

        showList: false,

        // how many todos in list
        numTodos: 0,

        modifyTodo: false,
        modifyTodoList: false,
        deleteList: false,

        checked: false,
        todoIndex: null,

        createTodo: {
            todo_list_id: 1,
            content: '',
            importance: '!',
            priority: 0,
            deadline: '',
            completed: 0
        },

        // custom todo
        importance: 1,
        importanceTxt: '!',
        isPriority: false,

        createList: {
            name: ''
        },
        
        // api vars
        baseUrl: "http://127.0.0.1:8000/api/"

    },
    created() {
        this.apiCall(this.baseUrl, "todos", this.allTodos);
        this.singleTodoList = [];
        this.apiCall(this.baseUrl, "todos", this.singleTodoList);
        this.apiCall(this.baseUrl, "todoLists", this.allTodoLists);
    },
    methods: {
        // ajax call function
        apiCall(url, type, array) {
            axios.get(url + type).then(resp => {
                resp.data.forEach(el => {
                    if (! array.includes(el)) {
                        array.push(el);
                    }
                });
            })
        },
        countTodos(id) {
            this.allTodos.forEach(todo => {
                if (id === todo.todo_list_id) {
                    var num = this.allTodos.length
                }
                return num;
            });
        },
        setImportance() {
            this.createTodo.importance = '!'
            if (this.importance < 4) {
                this.importance ++
            } else {
                this.importance = 1
            }
            switch (this.importance) {
                case 1:
                    this.importanceTxt = '!'
                    this.createTodo.importance = '!'
                    break;
                case 2:
                    this.importanceTxt = '!!'
                    this.createTodo.importance = '!!'
                    break;
                case 3:
                    this.importanceTxt = '!!!'
                    this.createTodo.importance = '!!!'
                    break;
                default:
                    this.importanceTxt = '!'
                    this.createTodo.importance = '!'
                    break;
            }
        },
        setPriority() {
            this.isPriority = !this.isPriority
            this.isPriority ? this.createTodo.priority = 1 : 0
        },
        cathegoryListFunc(el ,condition) {
            this.todoListTitle = el.name;

            if (condition == 'allTodos') {
                this.showAllTodos()
            } else if (condition == 'PriorityTodos') {
                this.showPriorityTodos()
            } else {
                console.log('con scadenza');
            }
        },
        showAllTodos() {
            this.singleTodoList = [];
            this.apiCall(this.baseUrl, "todos", this.singleTodoList);
        },
        showPriorityTodos() {
            this.singleTodoList = [];
            axios.get(this.baseUrl + "todos").then(resp => {
                resp.data.forEach(el => {
                    if (el.priority == 1) {
                        this.singleTodoList.push(el);
                    }
                });
            })
        },
        setTodoListIndex(todoList, id) {
            this.todoListTitle = todoList.name;
            this.listIndex = id;
            this.singleTodoList = [];
            this.allTodos.forEach(todo => {
                if (id === todo.todo_list_id) {
                    if (! this.singleTodoList.includes(todo)) {
                        this.singleTodoList.push(todo);
                    }
                }
            });
            this.createTodo.todo_list_id = id;
        },
        todoCounter(id) {
            let counter = 0;
            this.allTodos.forEach( todo => {
              (todo.todo_list_id === id) ? counter ++ : '';
            });
            return counter
        },
        createTodoItem() {
            axios.post('http://127.0.0.1:8000/api/todos', this.createTodo);
            this.createTodo.todo_list_id = this.listIndex;
            this.createTodo.importance = '!';
            this.createTodo.priority = 0;
            this.createTodo.content = '';
            this.createTodo.completed = 0
            window.location.reload(true);
        },
        deleteTodoItem(id) {
            axios.delete('http://127.0.0.1:8000/api/todos/' + id);
            window.location.reload(true);
        },
        createTodoList() {
            axios.post('http://127.0.0.1:8000/api/todoLists', this.createList);
            window.location.reload(true);
        },
        deleteTodoList(id) {
            axios.delete('http://127.0.0.1:8000/api/todoLists/' + id);
            window.location.reload(true);
        },
        updateTodo(todoItem, id) {
            this.modifyTodo = false;
            axios.put('http://127.0.0.1:8000/api/todos/' + id, todoItem);
            window.location.reload(true);
        },
        updateTodoList(todoList, id) {
            this.modifyTodoList = false;
            axios.put('http://127.0.0.1:8000/api/todoLists/' + id, todoList);
            window.location.reload(true);
        },
        importanceValues(el) {
            if (el.length > 1) {
                if (el == '!!') {
                    return 'alert'
                } else {
                    return 'important'
                }
            }
        },
        ifMobile() {
            // mettere la media screen match
            if (window.matchMedia("(max-width: 768px)").matches) {
                return this.showList == true;
            } else {
                this.showList = true
                return this.showList == true;
            }
        },
        managelist() {
            this.deleteList = !this.deleteList;
            this.modifyTodoList = ! this.modifyTodoList;
        },
        todoDone(todoItem, id) {
            todoItem.completed === 0 
                ? todoItem.completed = 1 
                : todoItem.completed = 0;                
            axios.put('http://127.0.0.1:8000/api/todos/' + id, todoItem);
            window.location.reload(true);
        }
    }
})