<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Layout : CodeIgniter Library
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* @author Dayle Reec (c) Copyright 2011.
* @license http://www.gnu.org/licenses/gpl.html
*/
class Layout
{
	/** 
	* Show a view within our defined template.
	*
	* @access public
	* @param $page string The CI style URI path to the view.
	* @param $options Array An array of values to be passed to the view.
	* @return void
	*/
	public function show($page, $options = array())
	{
		// fill in any missing information with the prepare method
		$options = $this->_prepare($options);

		// our boilerplate template needs the url helper
		$this->load->helper('url');

		// show the header template part
		$this->load->view('template/header', $options);

		// show the view as requested by the show method
		$this->load->view($page, $options);

		// show the footer template part
		$this->load->view('template/footer', $options);
	}

	/**
	* Prepare the options array for sure within the template.
	*
	* @access private
	* @param $options array The incoming array of options passed to the view.
	* @return array The outgoing options to be passed to the array.
	*/
	private function _prepare($options)
	{
		// set view defaults
		if ( ! isset($options['page_title']) ) $options['page_title'] = 'Codeigniter Project';
		if ( ! isset($options['meta_desc']) ) $options['meta_desc'] = 'my meta description';
		if ( ! isset($options['meta_author']) ) $options['meta_author'] = 'my meta author';

		// your view manipulation code here, add anything you like
		// to the options array..

		return $options;
	}

	/**
	* Magic PHP5 method to get either a local attribute, or a CodeIgniter object.
	*
	* @access public
	* @param $key string The object to fetch, by its key.
	* @return mixed
	*/
	public function __get($key)
	{
		// if the object exists locally, hand it over
		if ( property_exists($this, $key) ) return $this->$key;

		// get hold of the running singleton codeigniter object
		$codeigniter = get_instance();

		// if the object exists within the codeigniter object, hand it over
		if ( property_exists($codeigniter, $key) ) return $codeigniter->$key;
	}
}