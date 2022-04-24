<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => '5V Dual Channel Relay Module with Optocoupler',
            'price' => 100,
            'description' => '5V Dual Channel Relay Module with Optocoupler',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2022/02/kit_m5_2relay.jpg'
        ]);
        Products::create([
            'name' => 'Raspberry Pi Pico',
            'price' => 225,
            'description' => 'Raspberry Pi Pico is a low-cost, high-performance microcontroller board with flexible digital interfaces.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2021/08/rpi_pico.jpg'
        ]);
        Products::create([
            'name' => 'UT39C+ Modern Digital Multimeter',
            'price' => 300,
            'description' => 'UT39C+ is a portable multimeter designed for electric industry, it has overvoltage and overcurrent alarm functions, and high voltage protection for misoperation, complying with CAT II 1000V/CAT III 600V safety stardards.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/12/UT39Cplus.jpg'
        ]);
        Products::create([
            'name' => 'Arduino Mega2560 Rev3',
            'price' => 475,
            'description' => 'The Arduino Mega 2560 is a microcontroller board based on the ATmega2560. It has 54 digital input/output pins (of which 14 can be used as PWM outputs), 16 analog inputs',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2019/01/arduino_2560_comp_600x600.jpg'
        ]);
        Products::create([
            'name' => 'Arduino Nano',
            'price' => 150,
            'description' => 'The Arduino Nano is a small, complete, and breadboard-friendly board based on the ATmega328',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/nano_no_cable.jpg'
        ]);
        Products::create([
            'name' => 'Arduino UNO Rev3',
            'price' => 350,
            'description' => 'The Arduino UNO Rev.3 board is a microcontroller board based on the ATmega328 (data sheet). It has 14 digital input/output pins (of which 6 can be used as PWM outputs), 6 analog inputs',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/uno_r3.jpg'
        ]);
        Products::create([
            'name' => 'Arduino Shield "Sensor Shield for Digital Analog Module & Servo"',
            'price' => 50,
            'description' => 'Arduino Sensor Shield V5.0 for digital analog module and servos.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/arduino_sh_sensor.jpg'
        ]);
        Products::create([
            'name' => 'Electronic Components Starter Package',
            'price' => 225,
            'description' => 'If you are going to make your own lap or already have one , so this starter package is for you with important and general purpose components for most projects.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/12/kit_components.jpg'
        ]);
        Products::create([
            'name' => '3 Axis Digital Gyroscope Sensor Module – L3G4200',
            'price' => 175,
            'description' => 'GY-50 L3G4200D Axis Digital Gyroscope Sensor Module Angular Velocity Module',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/10/kit_L3G4200D_gyroscope.jpg'
        ]);
        Products::create([
            'name' => 'Bluetooth Module HC-05',
            'price' => 175,
            'description' => 'Very simple Bluetooth module (Based on BC417 Chip) to connect it with your microcontroller , Arduino , Raspberry Pi , or any MCU board using the TTL UART interface.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/kit_bluetooth_hc05.jpg'
        ]);
        Products::create([
            'name' => 'Electrolytic Capacitor 10uF 50v',
            'price' => 0.5,
            'description' => 'Radial Electrolytic type capacitor , Low Leakage Current , Wide Operating Temperature Range , Long Life.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/capacitor.jpg'
        ]);
        Products::create([
            'name' => 'Electrolytic Capacitor 10uF 100v',
            'price' => 0.75,
            'description' => 'Radial Electrolytic type capacitor , Low Leakage Current , Wide Operating Temperature Range , Long Life.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/capacitor.jpg'
        ]);
        Products::create([
            'name' => 'Electrolytic Capacitor 10uF 250v',
            'price' => 1.5,
            'description' => 'Radial Electrolytic type capacitor , Low Leakage Current , Wide Operating Temperature Range , Long Life.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/capacitor.jpg'
        ]);
        Products::create([
            'name' => 'Electrolytic Capacitor 33uF 50v',
            'price' => 0.5,
            'description' => 'Radial Electrolytic type capacitor , Low Leakage Current , Wide Operating Temperature Range , Long Life.',
            'image' => 'https://ram-e-shop.com/wp-content/uploads/2018/09/capacitor.jpg'
        ]);
    }
}
