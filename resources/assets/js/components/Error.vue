<template lang="pug">
    div(class="text-danger")
        h1(
            v-for="error in errors") {{ error }}
</template>

<script>
    export default {
        props: {
            errors: {
                type: Array
            }
        }
    }
</script>
