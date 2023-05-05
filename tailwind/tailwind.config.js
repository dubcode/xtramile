// Set Preflight flag and Tailwind Typography class name based on the build
// target.
let includePreflight, typographyClassName;
if ('editor' === process.env._TW_TARGET) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}
const colors = require('./custom/theme-config/colors.js');
module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		container: {
			padding: '2rem',
		},
		fontFamily: {
			'sans': ['Source Sans Pro', 'Arial', 'Helvetica', 'sans-serif'],
			'colombo': ['Colombo', 'sans-serif'],
		},
		screens: {
			'sm': '640px',
			'md': '768px',
			'ml': '901px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
		},
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				...colors,
				// Customise the theme colours here without having to change template files
				theme: {
					'text-body': colors.grey[700],
					'text-heading': colors.grey[900],
					'section-topbar': colors.grey[800],
					'section-header': colors.grey[900],
					'section-footer': colors.grey[900],
					'section-copyright': colors.grey[800],
				},
			},
			fontFamily: {
				'sans': ['Source Sans Pro', 'Arial', 'Helvetica', 'sans-serif']
			},
			maxWidth: {
				'md-lg': '49.25rem'
			},
		}
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography')({
			className: typographyClassName,
		}),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
