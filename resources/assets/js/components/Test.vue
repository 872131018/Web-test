<template>
    <div class="container">
        <input name="user-field" type="text" :placeholder="userInputPlaceholder"/>
        <input type="button" value="Search"/>
    </div>
</template>

<script>
    export default {
        name: 'Test',
        data: function () {
            return {
                userInputPlaceholder: 'Enter User'
            };
        }
    }
</script>
