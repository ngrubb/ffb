import { Template } from 'meteor/templating';
import { Matchups } from '../api/tasks.js';

import './body.html';
 
Template.body.helpers({
	matchups() {
   		return Matchups.find({});
  	},
});