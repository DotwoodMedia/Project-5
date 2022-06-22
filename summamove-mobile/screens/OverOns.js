import { StatusBar } from 'expo-status-bar';
import React, { useEffect, useState, useContext } from 'react';
import { Text, View, ScrollView, Image, T, Linking } from 'react-native';
import { AuthContext } from '../providers/AuthProvider';
import axios from 'axios';
import { useIsFocused } from "@react-navigation/native";
import { API_URL, SITE_URL } from "@env";
import pkg from '../package.json';

import tw from 'tailwind-react-native-classnames';

axios.defaults.baseURL = API_URL;

export default function OverOns() {
    const [prestaties, setPrestaties] = useState([]);

    const { user, logout } = useContext(AuthContext);
    axios.defaults.headers.common['Authorization'] = `Bearer ${user}`;

    const isFocused = useIsFocused();
    useEffect(() => {
        if (isFocused) {
            try {
                axios.get('prestaties').then(response => {
                    if (response.data.message == "Unauthenticated.") {
                        return logout();
                    }

                    setPrestaties(response.data);
                }).catch(error => {
                    console.log(error.response);
                })
            } catch (error) {
                if (error.response.data.message == "Unauthenticated.") {
                    return logout();
                }
                console.log(error);
            }
        }
    }, [isFocused])

    return (
        <ScrollView style={tw.style('bg-gray-100 h-full px-5 mt-16')}>
            <Text style={tw.style('font-black text-3xl')}>Over ons</Text>
            <Text style={tw.style('font-bold text-lg mb-5')}>Bekijk hier alle informatie over de app</Text>
            <StatusBar style="auto" />

            <Text style={tw.style('text-lg mb-5')}>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</Text>
            
            <Text style={tw.style('text-lg')}><Text style={tw.style('font-bold')}>Versie:</Text> {pkg.version}</Text>
            <Text style={tw.style('text-lg')}><Text style={tw.style('font-bold')}>Hulp nodig?</Text> <Text onPress={() => Linking.openURL('https://summamove.nl/contact')}>https://summamove.nl/contact</Text></Text>
        </ScrollView>
    )
}