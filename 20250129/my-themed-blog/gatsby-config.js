module.exports = {
  // Customize your site metadata:
  siteMetadata: {
    title: `Il Mio Blog Personale`,
    author: `Scrivocodice`,
    description: `Blog minimalista`,
    social: [
      {
        name: `twitter`,
        url: `https://twitter.com/gatsbyjs`,
      },
      {
        name: `github`,
        url: `https://github.com/gatsbyjs`,
      },
    ],
  },
  plugins: [
    {
      resolve: `gatsby-theme-blog`,
      options: {},
    },
  ],
}
