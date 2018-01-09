<template lang="pug">
    div(class="container")
        input(name="user-field" type="text"
            :placeholder="userInputPlaceholder"
            v-model="input")
        input(type="button" value="Search"
            @click="fetch()")
        User(
            v-if="user.name"
            :user="user")
        Error(
            v-if="errors.length > 0"
            :errors="errors")
</template>

<script>
    import axios from 'axios';
    import User from './User';
    import Error from './Error';

    export default {
        name: 'Test',
        data: function () {
            return {
                userInputPlaceholder: 'Enter User',
                input: '',
                user: {},
                errors: []
            };
        },
        methods: {
            fetch() {
                this.user = {};
                this.errors = [];
                axios.get(`/email?q=${ this.input }`).then(response => {
                    console.log(response.data)
                    this.user = response.data
                }).catch(err => {
                    console.log(err.response.data)
                    this.errors.push(err.response.data.error)
                });
            }
        },
        components: {
            User,
            Error
        }
    }
</script>
