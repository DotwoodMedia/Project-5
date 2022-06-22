import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';

import Oefeningen from '../screens/Oefeningen';
import Login from '../screens/Login';
import Register from '../screens/Register';

const Tab = createMaterialBottomTabNavigator();

export default function AppStack({ navigation }) {
    return (
        <Tab.Navigator
            barStyle={{ backgroundColor: '#ffffff' }}
            activeColor="#d60096"
            inactiveColor="#25126e">
            <Tab.Screen name="Oefeningen"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="ballot" color={color} size={26} />
                    ),
                }}
                component={Oefeningen} />

            <Tab.Screen name="Inloggen"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="login" color={color} size={26} />
                    ),
                }}
                component={Login} />

            <Tab.Screen name="Registreren"
                options={{
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="account-plus" color={color} size={26} />
                    ),
                }}
                component={Register} />
        </Tab.Navigator>
    );
}