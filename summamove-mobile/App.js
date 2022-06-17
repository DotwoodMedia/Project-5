import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import { NavigationContainer } from '@react-navigation/native';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';

import HomeScreen from './screens/Home';

const Tab = createMaterialBottomTabNavigator();

export default function App() {
  return (
    <NavigationContainer>
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
          component={HomeScreen} />

        <Tab.Screen name="Oefeningen"
          options={{
            tabBarIcon: ({ color }) => (
              <MaterialCommunityIcons name="ballot" color={color} size={26} />
            ),
          }}
          component={HomeScreen} />

        <Tab.Screen name="Prestaties"
          options={{
            tabBarIcon: ({ color }) => (
              <MaterialCommunityIcons name="star" color={color} size={26} />
            ),
          }}
          component={HomeScreen} />

        <Tab.Screen name="Over ons"
          options={{
            tabBarIcon: ({ color }) => (
              <MaterialCommunityIcons name="book-account" color={color} size={26} />
            ),
          }}
          component={HomeScreen} />
      </Tab.Navigator>
    </NavigationContainer>
  );
}
