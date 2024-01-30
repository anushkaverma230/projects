const options = {
    bottom: '64px', // default: '32px'lable icone set
    right: '32px', // default: '32px'lable icone set
    left: 'unset', // default: 'unset' lable icone set
    time: '0.6s', // default: '0.2s' for animation perpose
    mixColor: '#fff', // default: '#fff'-white 
    backgroundColor: '#fff',  // default: '#fff' website background color can be anything 
    buttonColorDark: '#100f2c',  // default: '#100f2c'button dark color.
    buttonColorLight: '#fff', // default: '#fff' button dark color
    saveInCookies: true, // default: true,save's in browser even after refresh the mode will be in dark
    label: '🌓', // default: '' can be set anyicon by pressing"windows+';'"
    autoMatchOsTheme: true, // default: true
  }
  const darkmode = new Darkmode(options);
  
darkmode.showWidget();

