# Form Partials for Laravel

## Installation
There's no setup for this package. Simply require it with composer and start using the included partials

## Usage
`@include('FormPartials::text', ['name' => 'field', 'label' => 'My field'])`
Each field is configured by the array passed in to it, check the partials themselves for all the options


### Available Field Types
- Checkbox
- Checkbox (Multiple)
- Hidden
- Select
- Select (Date)
- Text
- Textarea