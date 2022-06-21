import React, { useState, createContext, useEffect } from 'react';
import * as SecureStore from 'expo-secure-store';
import axios from 'axios';

axios.defaults.baseURL = 'http://10.244.18.24:8000/api';

export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
    const [user, setUser] = useState();
    const [error, setError] = useState();

    return (
        <AuthContext.Provider
            value={{
                user,
                setUser,
                error,
                setError,
                register: (name, email, password) => {
                    axios.post('/register', {
                        name,
                        email,
                        password,
                        password_confirmation: password
                    }).then(response => {
                        setUser(response.data.access_token);
                        SecureStore.setItemAsync('user_token', response.data.access_token);
                    }).catch(error => {
                        if (error.response) {
                            // setError(error.response.data.message);
                            console.log(error.response);
                        }
                    })
                },
                login: (email, password) => {
                    axios.post('/login', {
                        email,
                        password,
                    }).then(response => {
                        setUser(response.data.access_token);
                        SecureStore.setItemAsync('user_token', response.data.access_token);
                    }).catch(error => {
                        if (error.response) {
                            setError(error.response.data.message);
                            console.log(error.response);
                        }
                    })
                },
                logout: () => {
                    axios.defaults.headers.common['Authorization'] = `Bearer ${user}`;

                    axios.get('/logout').then(response => {
                        setUser();
                        SecureStore.deleteItemAsync('user_token')
                    }).catch(error => {
                        setUser();
                        SecureStore.deleteItemAsync('user_token');
                        console.log(error.response);
                    })
                },
            }}>
            {children}
        </AuthContext.Provider >
    );
}