<script setup>
const props = defineProps({
    users: {
        type: Array,
        default: null,
    },
});
</script>

<template>
    <div>
        <Login />
        <div v-if="props.users">
            <h2>Users</h2>
            <ul>
                <li v-for="user in props.users" :key="user.id">
                    {{ user.name }}
                </li>
            </ul>
        </div>
    </div>
</template>
