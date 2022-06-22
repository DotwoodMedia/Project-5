import { StatusBar } from 'expo-status-bar';
import React, { useEffect, useState, useContext } from 'react';
import { Text, View, ScrollView, Image, T } from 'react-native';
import { AuthContext } from '../../providers/AuthProvider';
import axios from 'axios';
import { useIsFocused } from "@react-navigation/native";
import { API_URL, SITE_URL } from "@env";

import tw from 'tailwind-react-native-classnames';

axios.defaults.baseURL = API_URL;

export default function Prestaties() {
    const [prestaties, setPrestaties] = useState([]);

    const { user, logout } = useContext(AuthContext);
    axios.defaults.headers.common['Authorization'] = `Bearer ${user}`;

    const isFocused = useIsFocused();
    useEffect(() => {
        if (isFocused) {
            try {
                axios.get('user/prestaties').then(response => {
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
            <Text style={tw.style('font-black text-3xl')}>Prestaties</Text>
            <Text style={tw.style('font-bold text-lg mb-5')}>Bekijk hier al jouw prestaties</Text>
            <StatusBar style="auto" />

            {prestaties.map(prestatie => {
                return (
                    <View style={tw.style('bg-yellow-400 rounded-3xl p-5 mb-4 flex-row justify-between items-center')} key={prestatie.id}>
                        <View>
                            <Text style={tw.style('font-bold text-xl')}>{prestatie.naam}</Text>
                            <Text style={tw.style('text-lg')}>{prestatie.datum}</Text>
                        </View>
                    </View>
                )
            }
            )}
        </ScrollView>
    )
}