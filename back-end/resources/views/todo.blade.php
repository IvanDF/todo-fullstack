<!DOCTYPE html>
<html lang="@{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('img/icon/icon.png')}}" type="image/x-icon">

        <title>To Do</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="todo">
            <div class="container">
                <main class="todo">
                    <transition name="slide">
                        <aside class="todo-nav" v-if="ifMobile()">
                            <div class="main-cathegory">
                                <!-- static buttons cathegories -->
                                <ul class="cathegory-list">
                                    <li class="cathegory-item" v-for="el in cathegoryList" @click="cathegoryListFunc(el.click)">
                                        <span v-html="el.icon"></span>
                                        @{{ el.name }}
                                    </li>
                                </ul>
                            </div>
                            <!-- todo lists -->
                            <div class="user-todo mt-1">
                                <ul class="user-lists list-none">
                                    <!-- get all todo lists  -->
                                    <li class="users-lists-item" v-for="(todoList, index) in allTodoLists" @click="showList = !showList">
                                        <span @click="setTodoListIndex(todoList, todoList.id)" @keyup.enter="updateTodoList(todoList, todoList.id)">
                                        <input class="user-list-element" :disabled="!modifyTodoList" type="text" v-model="todoList.name">
                                        </span>
                                        <!-- set todolist id to show relative todos -->
                                        <span class="todo-count">@{{todoCounter(todoList.id)}}</span>
                                        <span v-if="deleteList" class="delete-todo-list" type="submit" @click="deleteTodoList(todoList.id)"><svg id="Layer_2" enable-background="new 0 0 24 24" height="22" viewBox="0 0 24 24" width="22" xmlns="http://www.w3.org/2000/svg"><g><path d="m21.5 20h-14c-.139 0-.271-.058-.365-.159l-7-7.5c-.18-.192-.18-.49 0-.683l7-7.5c.094-.1.226-.158.365-.158h14c1.379 0 2.5 1.122 2.5 2.5v11c0 1.378-1.121 2.5-2.5 2.5zm-13.783-1h13.783c.827 0 1.5-.673 1.5-1.5v-11c0-.827-.673-1.5-1.5-1.5h-13.783l-6.533 7z"/></g><g><path d="m19 16c-.128 0-.256-.049-.354-.146l-7-7c-.195-.195-.195-.512 0-.707s.512-.195.707 0l7 7c.195.195.195.512 0 .707-.097.097-.225.146-.353.146z"/></g><g><path d="m12 16c-.128 0-.256-.049-.354-.146-.195-.195-.195-.512 0-.707l7-7c.195-.195.512-.195.707 0s.195.512 0 .707l-7 7c-.097.097-.225.146-.353.146z"/></g></svg></span>
                                    </li>
                                    <li class="users-lists-item new-todo mt-1">
                                        <span class="add-container">
                                        + <input class="add-todo-list" type="text" @keyup.enter="createTodoList" v-model="createList.name" placeholder="Nuova lista">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <p class="delete-lists" @clicK="managelist">Gestisi liste</p>
                        </aside>
                    </transition>
                    <div class="todo-content">
                        <div class="content-header">
                            <div class="hamburger-menu" @click="showList = !showList">
                                <span></span>
                                <span></span>
                            </div>
                            <h4>@{{todoListTitle.toUpperCase()}}</h4>
                        </div>
                        <div class="content-body">
                            <ul class="list-none todo-list">
                                <div class="create-todo">
                                    <input class="add-todo" type="text" placeholder="Aggiungi un nuovo todo" v-Model="createTodo.content" @keyup.enter="createTodoItem"> 
                                    <div class="other-options">
                                        <span class="importance" @click="setImportance">@{{importanceTxt}}</span>
                                        <span :class="['priority', isPriority ? 'active' : '']" @click="setPriority"><svg id="Capa_1" enable-background="new 0 0 512 512" height="14" viewBox="0 0 512 512" width="14" xmlns="http://www.w3.org/2000/svg"><g><path d="m190.572 371.201-10.308 60.098c-2.098 12.228 10.776 21.59 21.764 15.813l53.972-28.375 53.972 28.375c10.978 5.774 23.863-3.575 21.764-15.813l-10.308-60.098 43.664-42.562c8.884-8.66 3.972-23.8-8.313-25.585l-60.342-8.768-26.985-54.68c-5.491-11.126-21.408-11.132-26.902 0l-26.985 54.68-60.342 8.768c-12.278 1.785-17.203 16.92-8.313 25.585zm37.109-48.361c4.886-.71 9.109-3.779 11.294-8.206l17.025-34.495 17.024 34.496c2.185 4.427 6.409 7.496 11.294 8.206l38.068 5.531-27.546 26.852c-3.535 3.446-5.148 8.411-4.314 13.277l6.503 37.915-34.05-17.901c-4.368-2.297-9.591-2.298-13.96 0l-34.05 17.901 6.503-37.915c.834-4.866-.779-9.831-4.314-13.277l-27.546-26.852z"/><path d="m497 58h-51v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-150.666v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-51c-8.284 0-15 6.716-15 15v424c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15 0-9.304 0-419.081 0-424 0-8.284-6.716-15-15-15zm-135.667-28h54.667v28h-54.667zm-265.333 0h54.667v28h-54.667zm386 452h-452v-283.92h452zm0-313.92h-452v-80.08h452z"/></g></svg></span>
                                    </div>
                                </div>
                                <li class="todo-item" v-for="(todoItem, index) in singleTodoList">
                                    <span class="todo-text" @dblclick="modifyTodo = !modifyTodo" @keyup.enter="updateTodo(todoItem, todoItem.id)">
                                        <span :class="['complete', todoItem.completed == 1 ? 'active' : '']" @click="todoDone(todoItem, todoItem.id)"></span>
                                        <input class="todo-element" :disabled="!modifyTodo" type="text" v-model="todoItem.content">
                                    </span>
                                    <span class="delete-todo" @click="deleteTodoItem(todoItem.id)"> <svg id="Layer_2" enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><g><path d="m21.5 20h-14c-.139 0-.271-.058-.365-.159l-7-7.5c-.18-.192-.18-.49 0-.683l7-7.5c.094-.1.226-.158.365-.158h14c1.379 0 2.5 1.122 2.5 2.5v11c0 1.378-1.121 2.5-2.5 2.5zm-13.783-1h13.783c.827 0 1.5-.673 1.5-1.5v-11c0-.827-.673-1.5-1.5-1.5h-13.783l-6.533 7z"/></g><g><path d="m19 16c-.128 0-.256-.049-.354-.146l-7-7c-.195-.195-.195-.512 0-.707s.512-.195.707 0l7 7c.195.195.195.512 0 .707-.097.097-.225.146-.353.146z"/></g><g><path d="m12 16c-.128 0-.256-.049-.354-.146-.195-.195-.195-.512 0-.707l7-7c.195-.195.512-.195.707 0s.195.512 0 .707l-7 7c-.097.097-.225.146-.353.146z"/></g></svg> </span>
                                    <div class="todo-info">
                                        <div class="created-at">@{{todoItem.created_at}}</div>
                                        <div class="importance-info">
                                            <span v-if="todoItem.importance.length > 1" :class="['importance', importanceValues(todoItem.importance)]">@{{todoItem.importance}}</span>
                                            <span class="priority" v-if="todoItem.priority === 1"><svg id="Capa_1" enable-background="new 0 0 512 512" height="12.5" viewBox="0 0 512 512" width="12.5" xmlns="http://www.w3.org/2000/svg"><g><path d="m190.572 371.201-10.308 60.098c-2.098 12.228 10.776 21.59 21.764 15.813l53.972-28.375 53.972 28.375c10.978 5.774 23.863-3.575 21.764-15.813l-10.308-60.098 43.664-42.562c8.884-8.66 3.972-23.8-8.313-25.585l-60.342-8.768-26.985-54.68c-5.491-11.126-21.408-11.132-26.902 0l-26.985 54.68-60.342 8.768c-12.278 1.785-17.203 16.92-8.313 25.585zm37.109-48.361c4.886-.71 9.109-3.779 11.294-8.206l17.025-34.495 17.024 34.496c2.185 4.427 6.409 7.496 11.294 8.206l38.068 5.531-27.546 26.852c-3.535 3.446-5.148 8.411-4.314 13.277l6.503 37.915-34.05-17.901c-4.368-2.297-9.591-2.298-13.96 0l-34.05 17.901 6.503-37.915c.834-4.866-.779-9.831-4.314-13.277l-27.546-26.852z"/><path d="m497 58h-51v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-150.666v-43c0-8.284-6.716-15-15-15h-84.667c-8.284 0-15 6.716-15 15v43h-51c-8.284 0-15 6.716-15 15v424c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15 0-9.304 0-419.081 0-424 0-8.284-6.716-15-15-15zm-135.667-28h54.667v28h-54.667zm-265.333 0h54.667v28h-54.667zm386 452h-452v-283.92h452zm0-313.92h-452v-80.08h452z"/></g></svg></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="{{ asset('./js/app.js') }}"></script>
    </body>
</html>
