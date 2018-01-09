<template lang="pug">
    div(class="text-success")
        h3 Name: {{ user.name }}
        h3 Email: {{ user.email }}
        h3 Favorite Food: {{ user.favorite_food }}
        h3 Favorite Color: {{ user.favorite_color }}
</template>

<script>
    export default {
        props: {
            user: {
                type: Object
            }
        }
    }
</script>
