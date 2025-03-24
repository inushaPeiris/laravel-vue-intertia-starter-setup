<template>
    <div>
        <form @submit.prevent="submitForm">
            <div>
                <label for="username">Username:</label>
                <input type="text" v-model="username" id="username" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" v-model="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" v-model="password" id="password" required>
            </div>
            <button type="submit">Add User</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const username = ref('');
const password = ref('');
const email = ref('');

const submitForm = async () => {
    try {
        const response = await axios.post('/users', {
            name: username.value,
            email: email.value,
            password: password.value
        });
        console.log('User added:', response.data);
    } catch (error) {
        console.error('Error adding user:', error);
    }
};
</script>
