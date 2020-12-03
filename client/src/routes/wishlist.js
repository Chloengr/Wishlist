import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/wishlist/';

export default [
  <Route path="/wishlists/create" component={Create} exact key="create" />,
  <Route path="/wishlists/edit/:id" component={Update} exact key="update" />,
  <Route path="/wishlists/show/:id" component={Show} exact key="show" />,
  <Route path="/wishlists/" component={List} exact strict key="list" />,
  <Route path="/wishlists/:page" component={List} exact strict key="page" />
];
