import * as SecureStore from 'expo-secure-store';
import React, { useState, useEffect, useContext } from "react";
import { NavigationContainer } from '@react-navigation/native';
import { AuthContext } from './providers/AuthProvider';

import AppBar from './components/AppBar';
import AuthBar from './components/AuthBar';

export default function Routes() {
    const { user, setUser } = useContext(AuthContext);

    useEffect(() => {
        SecureStore.getItemAsync('user_token').then(userToken => {
            if (userToken) {
                setUser(userToken);
            }
        }).catch(err => {
            console.log(err);
        })
    }, []);

    return (
        <NavigationContainer>
            {user ? <AppBar /> : <AuthBar />}
        </NavigationContainer>
    );
}
