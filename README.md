# WordPress Theme with Vite & Tailwind CSS

A modern WordPress theme built with Vite for fast development and Tailwind CSS for beautiful, responsive design. This theme provides a solid foundation for WordPress development with modern build tools and styling capabilities.

## 🚀 Features

- **Vite Build System**: Lightning-fast development with Hot Module Replacement (HMR)
- **Tailwind CSS**: Utility-first CSS framework for rapid UI development
- **Modern WordPress**: Full WordPress functionality with modern development tools
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **SEO Optimized**: WordPress SEO benefits with clean, semantic HTML
- **WooCommerce Ready**: Full WooCommerce support with enhanced gallery features
- **Development Tools**: Live reload, error handling, and debugging support
- **Custom Post Types**: Ready for custom content types and fields

## 📁 Project Structure

```
custom-theme/
├── inc/                       # PHP includes
│   ├── inc.vite.php          # Vite integration
│   └── menu.php              # WordPress menu configuration
├── dist/                     # Built assets (auto-generated)
├── main.js                   # JavaScript entry point
├── index.php                 # Main WordPress template
├── header.php               # WordPress header template
├── footer.php               # WordPress footer template
├── functions.php            # WordPress theme functions
├── style.css               # Theme stylesheet with metadata
├── index.css               # Main stylesheet
├── scripts.js              # Custom JavaScript
├── vite.config.js          # Vite configuration
├── tailwind.config.js      # Tailwind CSS configuration
├── package.json            # Node.js dependencies
└── README.md              # This file
```

## 🛠️ Installation

### Prerequisites
- **WordPress**: 6.0 or higher
- **Node.js**: 18.0 or higher
- **npm**: 8.0 or higher
- **PHP**: 8.0 or higher

### Setup Instructions

1. **Clone or Download the Theme**
   ```bash
   cd wp-content/themes/
   git clone [repository-url] custom-theme
   # or download and extract the theme files
   ```

2. **Install Dependencies**
   ```bash
   cd custom-theme
   npm install
   ```

3. **Activate the Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "Custom Theme"

4. **Configure WordPress**
   - Ensure permalinks are set to "Post name" or custom structure
   - The theme automatically configures REST API settings

## 🚀 Development

### Start Development Server
```bash
npm run dev
```
This starts the Vite development server at `http://localhost:3000/` with HMR enabled.

### Build for Production
```bash
npm run build
```
This creates optimized production files in the `dist/` directory.

### Development Workflow
1. Start the development server with `npm run dev`
2. Make changes to React components in the `src/` directory
3. Changes are automatically reflected in the browser via HMR
4. WordPress content is fetched dynamically via REST API

## 🔧 Configuration

### WordPress REST API
The theme automatically configures the WordPress REST API with:
- CORS headers for cross-origin requests
- Custom endpoints for site information and menus
- Featured image URLs in API responses
- Proper authentication handling

### Vite Configuration
The `vite.config.js` file is pre-configured with:
- React plugin for JSX support
- Tailwind CSS integration
- Development server settings
- Build optimization

### Tailwind CSS
Tailwind CSS is configured for:
- Custom color schemes
- Responsive breakpoints
- Component utilities
- Production optimization

## 📚 Usage

### Creating New Components
1. Create a new `.jsx` file in `src/components/`
2. Import and use in your pages or other components
3. Follow the existing component patterns

### Adding New Pages
1. Create a new component in `src/pages/`
2. Add routing logic in `App.jsx`
3. Update WordPress template hierarchy if needed

### Customizing Styles
- Use Tailwind CSS classes for styling
- Add custom CSS in `assets/styles/index.css`
- Modify Tailwind configuration in `tailwind.config.js`

### WordPress Integration
- Use the `WordPressAPI` service for data fetching
- Access WordPress data via `window.wpData` object
- Extend API endpoints in `functions.php`

## 🎨 Customization

### Theme Colors
Modify colors in `tailwind.config.js`:
```javascript
module.exports = {
  theme: {
    extend: {
      colors: {
        primary: '#your-color',
        secondary: '#your-color',
      }
    }
  }
}
```

### WordPress Hooks
Add custom functionality in `functions.php`:
```php
// Add custom REST API endpoints
add_action('rest_api_init', 'register_custom_endpoints');

// Customize theme features
add_action('after_setup_theme', 'theme_setup');
```

### React Components
Extend existing components or create new ones:
```jsx
// Example: Custom component
import React from 'react';

const CustomComponent = ({ data }) => {
  return (
    <div className="custom-component">
      {/* Your component JSX */}
    </div>
  );
};

export default CustomComponent;
```

## 🔍 API Reference

### WordPress REST API Endpoints
- `GET /wp-json/wp/v2/posts` - Fetch posts
- `GET /wp-json/wp/v2/pages` - Fetch pages
- `GET /wp-json/wp/v2/categories` - Fetch categories
- `GET /wp-json/wp/v2/tags` - Fetch tags
- `GET /wp-json/custom/v1/site-info` - Site information
- `GET /wp-json/custom/v1/menus/{location}` - Navigation menus

### React API Service
```javascript
import { WordPressAPI } from './services/api';

// Fetch posts
const posts = await WordPressAPI.getPosts();

// Fetch single post
const post = await WordPressAPI.getPostBySlug('post-slug');

// Search content
const results = await WordPressAPI.search('search-term');
```

## 🚨 Troubleshooting

### Common Issues

**Vite Server Not Starting**
- Check Node.js version (18+ required)
- Clear npm cache: `npm cache clean --force`
- Delete `node_modules` and reinstall: `rm -rf node_modules && npm install`

**WordPress REST API Errors**
- Verify permalinks are enabled
- Check WordPress version (6.0+ required)
- Ensure theme is properly activated

**Build Errors**
- Check for JavaScript syntax errors
- Verify all imports are correct
- Run `npm run build` to see detailed error messages

**CORS Issues**
- The theme automatically handles CORS headers
- If issues persist, check server configuration

### Debug Mode
Enable WordPress debug mode in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature-name`
3. Make your changes
4. Test thoroughly
5. Submit a pull request

### Development Guidelines
- Follow React best practices
- Use Tailwind CSS for styling
- Maintain WordPress coding standards
- Write clear commit messages
- Test on multiple devices and browsers

## 📄 License

This theme is licensed under the [MIT License](LICENSE).

## 🆘 Support

For support and questions:
- **Documentation**: Check this README and inline code comments
- **Issues**: Report bugs via GitHub issues
- **WordPress Forums**: Community support available
- **Community**: Join WordPress development communities

## 🔄 Changelog

### Version 0.1.0
- Initial release
- React 18 integration
- Vite 7.1 build system
- Tailwind CSS 4.1 styling
- WordPress REST API integration
- Complete component architecture
- HMR development environment

## 🚀 Roadmap

- [ ] TypeScript support
- [ ] Advanced caching strategies
- [ ] PWA capabilities
- [ ] Enhanced SEO features
- [ ] Performance optimizations
- [ ] Additional WordPress integrations

---

**Built with ❤️ for the WordPress community**