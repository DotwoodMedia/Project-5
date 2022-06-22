import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';

import Home from '../screens/Home';
import Oefeningen from '../screens/Oefeningen/index';
import Prestaties from '../screens/Prestaties/index';
import OverOns from '../screens/OverOns';

const Tab = createMaterialBottomTabNavigator();

export default function AppStack({ navigation }) {
    return (
        <Tab.Navigator
            barStyle={{ backgroundColor: '#ffffff' }}
            activeColor="#d60096"
            inactiveColor="#25126e">
            <Tab.Screen name="Home"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="home" color={color} size={26} />
                    ),
                }}
                component={Home} />

            <Tab.Screen name="Oefeningen"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="ballot" color={color} size={26} />
                    ),
                }}
                component={Oefeningen} />

            <Tab.Screen name="Prestaties"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="star" color={color} size={26} />
                    ),
                }}
                component={Prestaties} />

            <Tab.Screen name="Over ons"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="book-account" color={color} size={26} />
                    ),
                }}
                component={OverOns} />
        </Tab.Navigator>
    );
}