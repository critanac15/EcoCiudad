/** @type {import('tailwindcss').Config}*/
export default{
    content:[
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme:{
        extend:{
            fontFamily:{
                //Agregando fuentes -> Playfair y merriweather
                playfairDisplay :['"Playfair Display"','serif'],
                merriWeather:['Merriweather','serif'],
            },
        },
    },
    plugins:[],
}
