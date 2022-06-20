import { StatusBar } from 'expo-status-bar';
import React from 'react'
import { Text, View, ScrollView, Image } from 'react-native';

import tw from 'tailwind-react-native-classnames';

export default function Home() {
    return (
        <ScrollView style={tw.style('bg-gray-100 h-full px-5 mt-16')}>
            <Text style={tw.style('font-black text-3xl')}>Hallo Pascal 👋</Text>
            <Text style={tw.style('font-bold text-lg')}>Laten we je activiteit checken</Text>
            <StatusBar style="auto" />

            <View style={tw.style('mb-8')}>
                <View style={tw.style('flex-row mt-5')}>
                    <View style={tw.style('flex-1 bg-gray-200 rounded-3xl p-5 mr-4 shadow-md')}>
                        <Image
                            style={tw.style('w-20 h-20 mx-auto mb-2')}
                            source={require('../assets/img/lol.png')}
                        />
                        <Text style={tw.style('text-center text-lg')}><Text style={tw.style('font-bold')}>10</Text> afgeronde oefeningen</Text>
                    </View>

                    <View style={tw.style('flex-1 bg-gray-200 rounded-3xl p-5 mr-4 shadow-md')}>
                        <Image
                            style={tw.style('w-20 h-20 mx-auto mb-2')}
                            source={require('../assets/img/happy.png')}
                        />
                        <Text style={tw.style('text-center text-lg')}><Text style={tw.style('font-bold')}>10</Text> oefeningen bezig</Text>
                    </View>
                </View>

                <View style={tw.style('bg-gray-200 rounded-3xl p-5 shadow-md mt-5 flex-row items-center')}>
                    <Image
                        style={tw.style('w-20 h-20 mr-7')}
                        source={require('../assets/img/confetti.png')}
                    />
                    <View style={tw.style('flex-1')}>
                        <Text style={tw.style('font-bold text-xl')}>Hou dit vol!</Text>
                        <Text style={tw.style('text-lg')}>Je hebt totaal al 20 oefeningen gedaan</Text>
                    </View>
                </View>
            </View>

            <Text style={tw.style('font-bold text-xl')}>Trainingen</Text>

            <ScrollView horizontal={true} showsHorizontalScrollIndicator={false} style={tw.style('mt-5 flex-1')}>
                <View style={tw.style('bg-yellow-400 rounded-3xl p-5 mr-4 flex-row items-center')}>
                    <View style={tw.style('mr-10')}>
                        <Text style={tw.style('font-bold text-xl')}>Test Oefening</Text>
                        <Text style={tw.style('text-lg mb-2')}>Dit is een oefening</Text>
                    </View>

                    <Image
                        style={tw.style('w-20 h-20')}
                        source={{
                            uri: 'https://cdn-icons-png.flaticon.com/512/69/69840.png?w=360',
                        }}
                    />
                </View>

                <View style={tw.style('bg-yellow-400 rounded-3xl p-5 mr-4 flex-row items-center')}>
                    <View style={tw.style('mr-10')}>
                        <Text style={tw.style('font-bold text-xl')}>Test Oefening</Text>
                        <Text style={tw.style('text-lg mb-2')}>Dit is een oefening</Text>
                    </View>

                    <Image
                        style={tw.style('w-20 h-20')}
                        source={{
                            uri: 'https://cdn-icons-png.flaticon.com/512/69/69840.png?w=360',
                        }}
                    />
                </View>

                <View style={tw.style('bg-yellow-400 rounded-3xl p-5 mr-4 flex-row items-center')}>
                    <View style={tw.style('mr-10')}>
                        <Text style={tw.style('font-bold text-xl')}>Test Oefening</Text>
                        <Text style={tw.style('text-lg mb-2')}>Dit is een oefening</Text>
                    </View>

                    <Image
                        style={tw.style('w-20 h-20')}
                        source={{
                            uri: 'https://cdn-icons-png.flaticon.com/512/69/69840.png?w=360',
                        }}
                    />
                </View>
            </ScrollView>
        </ScrollView>
    )
}