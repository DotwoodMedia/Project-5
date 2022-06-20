import { StatusBar } from 'expo-status-bar';
import React, { useState, useContext } from 'react';
import { Text, View, Image, TextInput, TouchableOpacity } from 'react-native';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import { AuthContext } from '../providers/AuthProvider';
import tw from 'tailwind-react-native-classnames';

export default function Register() {
    const { register } = useContext(AuthContext);

    const [name, setName] = useState();
    const [email, setEmail] = useState();
    const [password, setPassword] = useState();

    return (
        <View style={tw.style('bg-gray-100 h-full px-5 mt-16')}>
            <StatusBar style="auto" />
            
            <Image
                style={tw.style('w-24 h-24 mx-auto mb-2')}
                source={require('../assets/img/customer.png')}
            />

            <Text style={tw.style('font-black text-3xl text-center')}>Registreren</Text>

            <TextInput style={tw.style('bg-gray-300 text-lg px-5 py-3 mt-10 text-black rounded-3xl')} onChangeText={(value) => setName(value)} placeholder="Gebruikersnaam"></TextInput>

            <TextInput style={tw.style('bg-gray-300 text-lg px-5 py-3 mt-5 text-black rounded-3xl')} onChangeText={(value) => setEmail(value)} placeholder="E-mailadres"></TextInput>

            <TextInput style={tw.style('bg-gray-300 text-lg px-5 py-3 mt-5 rounded-3xl')} secureTextEntry={true} onChangeText={(value) => setPassword(value)} placeholder="Wachtwoord"></TextInput>

            <TouchableOpacity onPress={() => register(name, email, password)}>
                <Text style={tw.style('bg-black text-xl text-white px-5 py-3 mt-5 text-white rounded-full font-bold text-center w-14 h-14 mx-auto')}><MaterialCommunityIcons name="arrow-right" color='#fff' size={24} /></Text>
            </TouchableOpacity>
        </View>
    )
}