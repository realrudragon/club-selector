$('.myColorPicker').colorPickerByGiro({
  /*preview: '.myColorPicker-preview'*/

  // a valid CSS selector / a DOM element / a jQuery-jqLite collection
  preview: '.myColorPicker-preview',
  // show the color picker
  showPicker: true,
  // hsl, hsla, rgb, rgba and hex
  format: 'rgb',
  // spaces in pixels
  sliderGap: 6,
  cursorGap: 6,

  // internationalization
  text: {
    close: 'Close',
    none: 'None',
  }
});
