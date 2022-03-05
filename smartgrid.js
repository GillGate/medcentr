const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '10px',
    container: {
        maxWidth: '1440px',
        fields: '65px'
    },
    breakPoints: {
        md: {
            width: "1024px",
        },
        sm: {
            width: "760px",
        },
        xs: {
            width: "480px",
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less', settings);