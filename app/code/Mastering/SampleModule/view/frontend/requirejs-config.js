/**
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            'mage/validation': 'Mastering_SampleModule/js/validation'
        }
    },
    config: {
        mixins: {
            'Mastering_SampleModule/js/validation' : {
                'Mastering_SampleModule/js/validation-mixin':true
            }
        }
    }
};
