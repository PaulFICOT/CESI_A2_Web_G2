var express = require('express');
var router = express.Router();
var Signs_in = require('../models/Signs_in');

router.get('/:id?', function(req, res, next) {  
    if (req.params.id) {  
        Signs_in.getSigns_inById(req.params.id, function(err, rows) {  
            if (err) {  
                res.json(err);  
            } else {  
                res.json(rows);  
            }  
        });  
    } else {  
        Signs_in.getAllSigns_in(function(err, rows) {  
            if (err) {  
                res.json(err);  
            } else {  
                res.json(rows);  
            }  
        });  
    }  
});  

router.post('/', function(req, res, next) {  
    Signs_in.addSign_in(req.body, function(err, count) {  
        if (err) {  
            res.json(err);  
        } else {  
            res.json(req.body); //or return count for 1 & 0  
        }  
    });  
});  

router.delete('/:id', function(req, res, next) {  
    Signs_in.deleteSign_in(req.params.id, function(err, count) {  
        if (err) {  
            res.json(err);  
        } else {  
            res.json(count);  
        }  
    });  
});  
router.put('/:id', function(req, res, next) {  
    Signs_in.updateSign_in(req.params.id, req.body, function(err, rows) {  
        if (err) {  
            res.json(err);  
        } else {  
            res.json(rows);  
        }  
    });  
});  


module.exports = router;
