/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px'
        },
        extend: {
            colors: {
                themePrimaryRed: 'hsl(358, 74%, 54%)', //#E03339
                themeLightRed: 'hsl(358, 74%, 64%)', //#E03339
                themeLighterRed: 'hsl(358, 74%, 74%)', //#E03339
                themeSuperLightRed: 'hsl(359,100%,92%)',
                themeBackgroundGray: 'hsl(0, 0%, 93%)', //#EEEEEE
                themeTextBlack: 'hsl(0, 0%, 20%)', //#333333
                themeTextHover: 'hsl(0,0%,51%)',
                themeGreenSuccess: 'hsl(115, 41%, 62%)', //#7CC576
                themeRating: 'hsl(31, 95%, 67%)' //#FBAF5D
            }
        },
    },
    plugins: [],
}
