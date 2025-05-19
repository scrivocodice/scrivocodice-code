/**
 * @type {import('gatsby').GatsbyConfig}
 */
module.exports = {
  siteMetadata: {
    title: "20250101",
    siteUrl: `https://scrivocodice.it`,
    description: "Un blog creato con Gatsby",
    author: "@scrivocodice",
  },
  plugins: [
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `blog`,
        path: `${__dirname}/content/blog/`, // Percorso dei tuoi file di contenuto
      },
    },
    `gatsby-transformer-remark`, // Per usare Markdown
    // Per MDX, aggiungi:
    // `gatsby-plugin-mdx`,
  ],
};
