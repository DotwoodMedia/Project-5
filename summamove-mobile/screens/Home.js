import { StatusBar } from 'expo-status-bar';
import React from 'react'
import { Text, View, SafeAreaView } from 'react-native';

import tw from 'tailwind-react-native-classnames';

export default function Home() {
    return (
        <SafeAreaView style={tw.style('bg-gray-100 h-full px-5 py-14')}>
            <Text style={tw.style('font-black text-3xl')}>Hallo Pascal 👋</Text>
            <Text style={tw.style('font-bold text-lg')}>Laten we je activiteit checken</Text>
            <StatusBar style="auto" />

            <View>
                <View style={tw.style('flex-row mt-5')}>
                    <View style={tw.style('flex-1 bg-gray-200 rounded-3xl p-5 mr-4 shadow-lg')}>
                        <Text style={tw.style('font-bold text-lg text-center')}>💪 Afgerond</Text>
                        <Text style={tw.style('text-4xl font-bold text-center mt-3 mb-2')}>10</Text>
                        <Text style={tw.style('text-center opacity-60 text-lg')}>Afgeronde oefeningen</Text>
                    </View>

                    <View style={tw.style('flex-1 bg-gray-200 rounded-3xl p-5 mr-4 shadow-lg')}>
                        <Text style={tw.style('font-bold text-lg text-center')}>💪 Afgerond</Text>
                        <Text style={tw.style('text-4xl font-bold text-center mt-3 mb-2')}>10</Text>
                        <Text style={tw.style('text-center opacity-60 text-lg')}>Afgeronde oefeningen</Text>
                    </View>
                </View>

                <View style={tw.style('bg-gray-200 rounded-3xl p-5 mr-4 shadow-lg mt-5')}>
                    <Text style={tw.style('font-bold text-lg text-center')}>💪 Afgerond</Text>
                    <Text style={tw.style('text-4xl font-bold text-center mt-3 mb-2')}>10</Text>
                    <Text style={tw.style('text-center opacity-60 text-lg')}>Afgeronde oefeningen</Text>
                </View>
            </View>
        </SafeAreaView>
    )
}