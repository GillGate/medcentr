const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '10px',
    container: {
        maxWidth: '1440px',
        fields: '65px'
    },
    breakPoints: {
        llg: {
            width: "1440px"
        },
        lg: {
            width: "1240px",
        },
        md: {
            width: "1024px",
        },
        sm: {
            width: "798px",
        },
        xs: {
            width: "580px",
        },
        xxs: {
            width: "460px",
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);